
#include<iostream>
using namespace std; 

class base
{
public:
	int cho,b,h,r,l,w;
	float area;

void getdata()
{
cout<<"Menu:"<<endl;
cout<<"1.Triangle"<<endl;
cout<<"2.Cricle"<<endl;
cout<<"3.Rectangle"<<endl;

cout<<"Select your choice:";
cin>>cho;
	
}
};
class letdata : 
public base
{
public:
void sdata()
{
	if (cho==1)
	{
		cout<<"Enter Base & Height:";
		cin>>b>>h;
		area=(b*h)/2;
		cout<<"Area of Triangle:"<<area;
	}
	else if (cho==2)
	{
		cout<<"Enter radius of circle:";
		cin>>r;
		area=3.142*r*r;
		cout<<"Area of Triangle:"<<area;
	}
	else if (cho==3)
	{
		cout<<"Enter Length & Width:";
		cin>>l>>w;
		area=l*w;
	    cout<<"Area of Rectangle:"<<area;
	}
	else
	{
			cout<<"invalid output";
	}	
}
};

int main()
{
letdata d;
d.getdata();
d.sdata();



}
