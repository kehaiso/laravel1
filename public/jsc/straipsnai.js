$(document).ready(function() {
    let itemsArray = localStorage.getItem('items') ? JSON.parse(localStorage.getItem('items')) : []
    let ul = $('ul')

    itemsArray.forEach(items => {
        let li = document.createElement('li')
        li.textContent = items

        ul.append(li)

    })








    console.log("opa");

    $('#submiteris').on('click', function(e) {
        e.preventDefault();
        var rytis = $('#item').val()
        itemsArray.push(rytis)
        localStorage.setItem('items', JSON.stringify(itemsArray))



    });




    function delete1() {
        console.log("opa");
        localStorage.clear('item');
        /*while (ul.firstChild) {
            ul.removeChild(ul.firstChild)
        }*/
    };





    /* $("#test").on('click', function() {
         console.log("Hello friend");
     });

    const form = document.querySelector('form')
    
    const button = document.querySelector('button')
    const input = document.getElementById('item')
    let itemsArray = localStorage.getItem('items') ? JSON.parse(localStorage.getItem('items')) : []

    localStorage.setItem('items', JSON.stringify(itemsArray))
    

    const liMaker = text => {
        const li = document.createElement('li')
        li.textContent = text
        ul.appendChild(li)
    }

    form.addEventListener('submit', function(e) {

        e.preventDefault()

        itemsArray.push(input.value)
        localStorage.setItem('items', JSON.stringify(itemsArray))
        liMaker(input.value)
        input.value = ''
    })

    data.forEach(item => {
        liMaker(item)
    })

    








*/
});