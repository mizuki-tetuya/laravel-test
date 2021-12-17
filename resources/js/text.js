$(function () {
    $('#post1').jpostal({
        click : '#btn',
        postcode : [
            '#post1',
        ],
        address : {
            '#address1' : '%3',
        }
    });
});