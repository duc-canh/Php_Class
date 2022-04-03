function checkht(input_text)
{
	if(input_text.value=="")
	{
		document.getElementById("baoloiht").innerHTML="chưa nhập dữ liệu";
		input_text.focus();//đặt lại focus vào text hiện tại
		return false;
	}
	document.getElementById("baoloiht").innerHTML="";
}
function checkdt(input_text)
{
	if(input_text.value=="")
	{
		document.getElementById("baoloidt").innerHTML="chưa nhập dữ liệu";
		input_text.focus();//đặt lại focus vào text hiện tại
		return false;
	}
	document.getElementById("baoloidt").innerHTML="";
}
function checkha(input_text)
{
	if(input_text.value=="")
	{
		document.getElementById("baoloiha").innerHTML="chưa nhập dữ liệu";
		input_text.focus();//đặt lại focus vào text hiện tại
		return false;
	}
	document.getElementById("baoloiha").innerHTML="";
}
function kiemtra()
{
	hoten = document.getElementById("kthoten");
	dienthoai = document.getElementById("ktdienthoai");
	hinhanh = document.getElementById("kthinhanh");
	if(hoten.value==""||dienthoai.value==""||hinhanh.value=="")
	{
		alert("Mời nhập đầy đủ điểm các môn");
		return false;
	}
	
}