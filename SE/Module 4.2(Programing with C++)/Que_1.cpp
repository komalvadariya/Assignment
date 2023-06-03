

#include<iostream>
using namespace std;

class calculator
{
	float a,b;
	public:
		
		void input()
		{
			cout<<"Enter two numbers :"<<endl;
			cin>>a>>b;
		}
		
		float Sum()
		{
			return a+b;
		}
	    float Sub()
		{
			return a-b;
		}
		float Mul()
		{
			return a*b;
		}
		float Div()
		{
			return a/b;
		}
	
};
int main()
{
	int ch;
	
	calculator obj;
	
	    cout<<"Addition:"<<endl;
	    cout<<"Substraction:"<<endl;
	    cout<<"Multiplication:"<<endl;
      	cout<<"Division:"<<endl;
	    cout<<"Exit:"<<endl;
	    
	do
	{
		
		cout<<"Enter chioce:"<<endl;
		cin>>ch;
		switch(ch)
		{
			case 1:
				obj.input();
				cout<<"Result = "<<obj.Sum()<<endl;
				break;
			case 2:
				obj.input();
				cout<<"Result = "<<obj.Sub()<<endl;
				break;
			case 3:
				obj.input();
				cout<<"Result = "<<obj.Mul()<<endl;
				break;
			case 4:
				obj.input();
				cout<<"Result = "<<obj.Div()<<endl;
				break;		
		}
		
	}while(ch>=1&&ch<=4);
	
	
	return 0;
}
