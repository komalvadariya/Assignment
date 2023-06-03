
#include<iostream>
using namespace std;

class BankAccount
{
	public:
	int bal=50000;
	char name[20]="KOMAL_PATEL";
	char type[10]="cureent";
	long int accountnumber=1464115641131;
	int de,with,tod,towith;
	
	public:
		void Bank()
		{
			cout<<"Bank Account Details:"<<endl;
			cout<<"Name of the depositor : "<<name<<endl;
			cout<<"Account Number : "<<accountnumber<<endl;
			cout<<"Account Type :"<<type<<endl;
			cout<<"Balance = "<<bal<<endl;
		}
		int bank()
		{
			cout<<"Enter the amount to be deposit"<<endl;
			cin>>de;
			tod=50000+de;
		    cout<<"Remaining balance ="<<tod<<endl;
		    cout<<"Enter the amount to be Withdraw"<<endl;
		    cin>>with;
		    towith=tod-with;
		    cout<<"Remaining balance ="<<towith<<endl;
		    cout<<"Name ="<<name<<endl<<"Balance = "<<bal<<endl;
		}
};
int main()
{   
     BankAccount obj;
     obj.Bank();
     obj.bank();
}
