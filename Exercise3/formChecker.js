function validate()
{
    let success= false;
    let username = document.getElementById('us').value;
    let password = document.getElementById('pw').value;
    if(username == "")
    {
        alert("Empty Username!");
        return success;
    }
    if(username.search("@") == -1)
    {
        alert("Not valid Email");
        return success;
    }
    if(password == "")
    {
        alert("Empty Password!");
        return success;
    }

    let item1, item2, item3;
    item1 = document.getElementById("Item 1").value;
    item2 = document.getElementById("Item 2").value;
    item3 = document.getElementById("Item 3").value;
    if((item1 < 0) || (item2 < 0) || (item3 < 0))
    {

        alert("Invalid order value must be 0 or greater");
        return success;
    }


    let shipping = document.getElementsByName("shipping");
    //alert(shipping);
    if(document.forms["myform"]["shipping"].value =="")
    {
        alert("Pick a shipping option.");
        return success;
    }
    success = true;
    return sucess;
}
