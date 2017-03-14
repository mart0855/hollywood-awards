$(document).ready(function(){   
    //define an array of categories
    var categories = ["picture", "directing", "actor", "actress", "music"];    
    //any time a button with the .btn-success class is clicked
    $(".btn-success").click(function(){
        //create the variables s (submission) and c (category) 
        //cindex (category index in categories array), nc (next category in array)
        var s = $(this).attr("data-submission"),
            c = $(this).attr("data-category"),
            cindex = categories.indexOf(c);
        if(cindex === (categories.length - 1)){
            var nc = "thankyou.php";
        }else{
            var nc = categories[cindex + 1] + ".php";
        }           
       //trigger the votes function, passing s, c and nc
       vote(s,c,nc);
    });
});


//vote function definition
function vote(s,c,nc) {
    //instantiate the jquery ajax call
    //s = submission/selection answered
    //c = award category
    $.ajax({
        type: 'POST',
        cache: false,
        url: 'php/vote.php',
        dataType: 'json',
        data: {
            s: s,
            c: c
        },
        success: function (data) {//if the ajax call is successfull
            //take the user to the next category
            window.location = nc;
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            //silent error handling
        }
    });
}