function check()
{
    var count=0;
    var choice=document.querySelector(".choice").value;
    var questions=document.querySelector(".question").value;
    
    if(choice=="--Choose One Subject--")
        count=count+1;
    if(questions=="--Number Of Question--")
        count=count+1;
    if(count>0)
        return false;
    else
        return true;
}

var buttonId=new Array();
var divId=new Array();  
buttonId[0]='performance';
buttonId[1]='test';
buttonId[2]='graph';
divId[0]='#previous_data';
divId[1]='#test_time';
divId[2]='#previous_graph';
function showTab(e) 
{
	var selectedId = e;
	console.log(selectedId);
	for ( var i=0;i<buttonId.length;i++ )
	{	
		if(buttonId[i]==selectedId) 
		{
			document.querySelector(divId[i]).classList.remove("hide");
		} 
		else 
		{
			document.querySelector(divId[i]).classList.add("hide");
			document.querySelector("#dash").classList.add("hide");
		}
	}
	return false;
}
a=document.getElementsByClassName("resetradio");
for(var j=0;j<a.length;j++)
			{
				a[j].addEventListener("click",function(e){e.preventDefault();return false;});
			}
function checkradio(e,f)
{
	var i=document.getElementsByName(e)
		for(var j=0;j<i.length-1;j++)
			{
				if(i[j].checked==true)
					{
						document.getElementById(e).style.backgroundColor="#f6755e";
					}
			}

}
function resetradio(e)
{
	console.log(e)
	console.log(e.length)
	e=e.substr(0,(e.length-5))
	console.log(e);
	a=document.getElementsByName(e);
	for(var j=0;j<a.length-1;j++)
			{
						document.getElementById(e).style.backgroundColor="darkgray";
						a[j].checked=false;
						a[a.length-1].checked=true;
			}
	
}

