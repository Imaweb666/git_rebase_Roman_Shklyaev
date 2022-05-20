// "use strict";
// prompt( ' Hello my little friend... What is your name?', '' );
// confirm( ' Are you bored?' );
// alert( ' Of course' );

// $(document).ready(function() {
//     var randomColor = Math.floor(Math.random()*16777215).toString(16);
//         $("#background").css("background-color", '#' + randomColor);
//     });

var color = function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

var bgcolor = document.body.style.backgroundColor;
setInterval(function() { 
    document.body.style.backgroundColor = color(); //() to execute the function!
}, 500);

var quotes = [
    "The quick brown fox jumps over the lazy dog.",
    "Look out! There are llamas!",
    "No, really, don't get up.",
    "Whatever",
    "Etc.",
    "Aboba",
    "Quick and Dirty",
    "Down To The Wire",
    "Plot Thickens - The",
    "A Dime a Dozen",
    "Up In Arms",
    "It's Not All It's Cracked Up To Be",
    "A Little Bird Told Me",
    "Fish Out Of Water",
    "Quick On the Draw",
    "Drive Me Nuts",
    "Rain on Your Parade",
    "Happy as a Clam",
    "Between a Rock and a Hard Place",

  ];

document.getElementById("changeQuote").addEventListener("click", function() {
  var q = quotes[ Math.floor( Math.random() * quotes.length ) ];
  document.getElementById("test").innerHTML = q;     
});