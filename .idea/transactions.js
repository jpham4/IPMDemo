function addSelect() {
    var select = document.getElementById('inputGroupSelect01');
    switch (select){
        case "AddStocks":
            alert("Add Stocks works");
            var url = "addStocks.php";

            location.href = url + "?selectedVal=AddStocks";
            break;
        default:
    }
    return false;
}