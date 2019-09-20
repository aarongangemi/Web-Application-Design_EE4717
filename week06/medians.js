function median(list)
{
    list.sort(function(a,b){return a-b;});
    var list_len = list.length;
    if((list_len % 2) == 1)
        return list[Math.floor(list_len/2)];
    else
        return Math.round((list[list_len / 2 - 1] + list[list_len / 2]) /2);    
}

var myList1 = [8,3,9,1,4,7];
var myList2 = [10,-2,0,5,3,1,7];
var med = median(myList1);
document.write("Median of [",myList1,"] is: ", med, "<br />");
med = median(myList2);
document.write("Median of [",myList2,"] is: ", med, "<br />");