function validateForm()
{
	let x = document.forms["item"]["id"].value;
	if (x == "")
	{
		alert("Must enter item ID");
		return false;
	}else
	{
		if (isNaN(x)) 
		{
			alert("Item ID must be a number");
    			return false;
  		}
	}
	let y = document.forms["student"]["firstname"].value;
	var letters = /^[A-Za-z]+$/;
	let z = document.forms["student"]["lastname"].value;
        var letters = /^[A-Za-z]+$/;
        if(document.forms["student"]["genre"].value.match(letters))
        {
                //return true;
        }
        else
        {
                alert("Genre name must contain alphabet characters only");
                return false;
	}
}
