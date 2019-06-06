function menu() {
    var x = document.getElementById("Topnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

function program_choose(option) {

    switch (option) {
        case "beach":
            document.getElementById("park").disabled = true;
            document.getElementById("citytour").disabled = true;
            document.getElementById("segway").disabled = true;
            document.getElementById("camp_nou").disabled = true;
            break;
        case "park":
        case "citytour":
        case "segway":
        case "camp_nou":


    }


}