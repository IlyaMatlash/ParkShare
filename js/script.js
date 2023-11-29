document.addEventListener('DOMContentLoaded', function() {
  var sidenav = document.querySelectorAll('.sidenav');
  var instances_sidenav = M.Sidenav.init(sidenav);

  var collapsible = document.querySelectorAll('.collapsible');
  var instances_collapsible = M.Collapsible.init(collapsible, {
    accordion: true
  });

  var modal = document.querySelectorAll('.modal');
  var instances_modal = M.Modal.init(modal);

  const accordionTitles = document.querySelectorAll('.accordion__title');
  const accordionContent = document.querySelectorAll('.accordion__content');

  // АККОРДЕОН
  accordionTitles.forEach(title => title.addEventListener('click', () => {
  const activeContent = document.querySelector('#' + title.dataset.tab);

  if (activeContent.classList.contains('active')) {
    activeContent.classList.remove('active');
    title.classList.remove('active');
    activeContent.style.maxHeight = 0;
  } else {
    accordionContent.forEach(element => {
      element.classList.remove('active');
      element.style.maxHeight = 0;
    });
  
    accordionTitles.forEach(element => {
      element.classList.remove('active');
    });

    title.classList.add('active');
    activeContent.classList.add('active');
    activeContent.style.maxHeight = activeContent.scrollHeight + 'px';
  };

  })); 

  // СВАЙПЕР
  const swiper = new Swiper('.swiper', {
    // Optional parameters
    centeredSlides: true,
    direction: 'horizontal',
    loop: true,
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
    
  });

// ФОРМА
const form = document.getElementById('form');
form.addEventListener('submit', formSend);

  async function formSend(e) {
    e.preventDefault(); // Предотвращаем отправку формы по умолчанию

    let error = formValidate(form);

    let formData = new FormData(form);

    if (error === 0) {
      // form.classList.add('_sending');
      let response = await fetch('mail.php', {
        method: 'POST',
        body: formData
      });
      if (response.ok) {
        let result = await response.json();
        // alert(result.message);
        form.reset();
        // form.classList.add('_sending');
        instances_modal[0].open();
      }else {
        alert('Ошибка');
        // form.classList.remove('_sending');
      }
    } else {
      alert('Заполните обязательные поля')
    }
  }

  function formValidate(form) {
    let error = 0;
    let formReq = document.querySelectorAll('_req');
  
    for (let index = 0; index < formReq.length; index++) {
      const input = formReq[index];
      formRemoveError(input);

      if (input.classList.contains('_email')){
        if (emailTest(input)) {
          formAddError(input);
          error++;
        }
      } else { 
        if (input.value.trim() === '') {
        formAddError(input);
        error++; 
        }
      }
    }
    return error; 
  }

  function formAddError(input) {
    input.parentElement.classList.add('_error');
    input.classList.add('_error');
  }
  function formRemoveError(input) {
    input.parentElement.classList.remove('_error');
    input.classList.remove('_error');
  }
  function emailTest(input) {
    return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
  }

});

var container = document.querySelector('.admin__form-buttons');

function changeFormProperties() {
  let p = document.querySelectorAll("p");
  let text
  for(let i = 0; i < p.length; i++) {
    text = p[i].textContent
    p[i].innerHTML = `Паркомат № ${i+1} <input class="admin__form-input" type="text" value="${text}">
    <input type="button" value="Удалить" class="admin__form-btn admin__form-btn-del" onclick="deleteInputElement(this)">`;
  }

  let btn = document.querySelector("input[value='Редактировать']")
  let btnSave = document.getElementById("btnSave");
  if (!btnSave) {
    let btnSave = document.createElement("input")
    btnSave.type="button"
    btnSave.value="Сохранить"
    btnSave.setAttribute("onclick", "saveInputElement()")
    btnSave.setAttribute("class", "btn admin__form-btn admin__form-btn-save")
    btnSave.id="btnSave"
    container.appendChild(btnSave)
  }
  
  let btnAdd = document.getElementById("btnAdd");
    if (!btnAdd) {
        let btnAdd=document.createElement("input")
        btnAdd.type="button"
        btnAdd.value="Добавить"
        btnAdd.setAttribute("onclick","addInputElement()")
        btnAdd.setAttribute("class","btn admin__form-btn")
        btnAdd.id="btnAdd"
        container.appendChild(btnAdd)
    }
    btn.remove()
}

function deleteInputElement(button) {
  button.parentElement.remove()
} 

function addInputElement() {

  let form = document.querySelectorAll("p");
  let newp = document.createElement("p");
  newp.innerHTML = `Паркомат № ${form.length+1} <input class="admin__form-input" type="text" value="">
  <input type="button" value="Удалить" class="admin__form-btn admin__form-btn-del" onclick="deleteInputElement(this)">`;
  form[form.length-1].after(newp)
}

function saveInputElement() {
  let p = document.querySelectorAll("p");
  for(let i = 0; i < p.length; i++) {
    let text = p[i].querySelector("input[type=text]").value;
    p[i].innerHTML = text
  }

  let btn = document.querySelectorAll(".btn")
  let btnOk = document.createElement("input")
  btnOk.type="button"
  btnOk.value="Редактировать"
  btnOk.setAttribute("onclick", "changeFormProperties()")
  btnOk.setAttribute("class","btn admin__form-btn")
  btnOk.id="btnOk"
  container.appendChild(btnOk)
  //btn[0].after(btnOk)

  for(let i = 0; i < btn.length; i++) {
    btn[i].remove()
  }

  btnOk.setAttribute("class", "btn")
 
}
