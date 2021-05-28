$(function(){
    console.log("Loading animals");

    function loadAnimals(){
        $.getJSON("/api/animals/", function( animals ) {
            console.log(animals);
            var message = "No animals";
            if(animals.length > 0){
                message = animals[0].name;
            }
            $(".my-0").text(message);
        });
    };
    loadAnimals();
    setInterval(loadAnimals, 2000);
});