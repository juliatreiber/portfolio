// This is a comment at the top of the script.
//sticky nav

//grab the <p> elements with quotes

var quotes=$('.quotes'); //.quotes references the <p> class of quotes

// quotes.length counts the number <p> element with class .quotes. if the length is greater than 1, then run the function, showQuotes
    if(quotes.length > 1) {
        //showQuote();
        $(quotes[0]).css('display', 'block');
        setInterval(function() {timedQuotes()},4000);
    }
    function showQuote() {

        //alert("hello");
        var random=Math.floor(Math.random()*quotes.length);
        //console.log(random);
        //$(quotes[random]).css("display", "block").css("color", "red"); called chaining
        $(quotes[random]).css("display", "block");
    }
    function timedQuotes(){
        quotes.css('display', 'none');
        var random=Math.floor(Math.random()*quotes.length);
        console.log(random);
        $(quotes[random]).css("display", "block")

    }

//console.log(quotes);
