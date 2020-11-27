  var Start;

  function myFunction(){
    Start = setTimeout(showpage,3000);
}

  function showpage(){
    document.getElementById("loader").style.display="none";
    document.getElementById("content").style.display="block";
}