var cnt=0;
var noofseat=0;
var totalseat,i;
var statusbook=0;
var isBook="false";
var amt;
var seats = new Array();
function book(st)
{
if(!seats.includes(st.value))  // Checks whether the selected seat already selected or not
{	
	if(noofseat!=10)  // Checks whether no of selected seats are not abouve 10
	{
		if(noofseat+1!=0)
		{
			var sel=document.getElementById('seatlist');
			var opt = document.createElement("OPTION");
			opt.appendChild(document.createTextNode(st.value));
			sel.appendChild(opt);
			noofseat++;
			amt=noofseat*120;
			TxtSeats.innerHTML=noofseat;
			noSeats.value=noofseat;
		}
		else 
		{
			amt=noofseat*120;
			TxtSeats.innerHTML=1;
		}
		TxtAmt.innerHTML=Number(amt);
		seatAmt.value=Number(amt);
		seats.push(cnt,st.value);
		cnt++;
		st.style.backgroundImage = "url('img/seatselected.png')";
	}
	else
		alert("You can't Select more then 10 Seats...");
}
else
{
	if(seats.includes(st.value))
	{
		seats.splice(seats.indexOf(st.value),1);
		st.style.backgroundImage = "url('img/seat.png')";
		if(noofseat!=0)
		{
			TxtSeats.innerHTML=noofseat--;
			amt=noofseat;
			TxtSeats.innerHTML=noofseat;
			noSeats.value=noofseat;
			TxtAmt.innerHTML=Number(amt*120);
			seatAmt.value=Number(amt*120);
			var sel=document.getElementById('seatlist');
			sel.remove(sel.length-1);
		}
		else
		{
			noofseat==0;
			TxtSeats.innerHTML="No Seats Selected...";
		}
	}
}
			
		}
	