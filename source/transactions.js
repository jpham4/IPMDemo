function addSelect() {
    var select = document.getElementById('inputGroupSelect01').value;
    switch (select){
        case "AddStocks":
            var url = "addStocks.php";
            location.href = url + "?selectedVal=AddStocks";
            break;
        case "AddCrypto":
            var url2 = "addCrypto.php";
            location.href = url2 + "?selectedVal=AddCrypto";
        default:
    }
    return false;
}