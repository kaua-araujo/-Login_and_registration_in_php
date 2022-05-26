function form(event){
    event.preventDefault();
    console.log(event);
}
document.getElementById("form").addEventListener("submit", function(event){
    event.preventDefault()
  });