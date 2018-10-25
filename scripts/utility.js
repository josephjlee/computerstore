
function checkDelete()
{
    var chk;
    chk= confirm("Are you sure to delete this product?");
    if(chk)
        {
         return true;   
        }
    else{
        return false;
    }
}