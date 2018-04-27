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
    }
    return false;
}

function removeSelect() {
    var select = document.getElementById('inputGroupSelect02').value;
    switch (select){
        case "RemoveStocks":
            var url = "removeStocks.php";
            location.href = url + "?selectedVal=RemoveStocks";
            break;
        case "RemoveCrypto":
            var url2 = "removeCrypto.php";
            location.href = url2 + "?selectedVal=RemoveCrypto";
    }
    return false;
}