var cnt=0;
var noofseat=0;
var totalseat,i;
var statusbook=0;
var isBook="false";
var amt;
var seats = new Array();

function seatImg()
{
	var x = document.getElementById('sel');
	x.style.visibility = "hidden";
	var opts = sel.options;
	var myId;
	var mySelected;
	var myFinalSeats;
	for(i=1;i<53;i++)
	{
		mySelected = i;
		myFinalSeats = "s"+i;
		myId = document.getElementById(myFinalSeats);
		myId.style.backgroundImage = "url('img/seat.png')";
	}
	for(i=0;i<opts.length;i++)
	{
		mySelected = opts[i].value;
		myFinalSeats = "s"+mySelected;
		myId = document.getElementById(myFinalSeats);
		myId.style.backgroundImage = "url('img/seatreserved.png')";
		myId.onclick = false;
	}
}

function book(st)
{
	if(!seats.includes(st.value))  // Checks whether the selected seat already selected or not
	{	
		if(noofseat!=10)  // Checks whether no of selected seats are not abouve 10
		{
			if(noofseat+1!=0)
			{
				var seatId=document.getElementById('seatlst');
				if(seatId.value == "")
				{
					seatId.value=st.value;
				}
				else
				{
					seatId.value=seatId.value+","+st.value;
				}
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
				var seatId=document.getElementById('seatlst');
				if(seatId.value.length > 1)
				{
					var result=seatId.value.replace(","+st.value,'');
					seatId.value = result;
				}
				else
				{
					var result=seatId.value.replace(st.value,'');
					seatId.value = result;
				}
				
			}
			else
			{
				noofseat==0;
				TxtSeats.innerHTML="No Seats Selected...";
			}
		}
	}
			
}
	