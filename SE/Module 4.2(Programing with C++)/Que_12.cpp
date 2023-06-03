
#include<iostream>
using namespace std;

class Swap
{
	public:
	int a,b;
	
	public:
		friend void swap(Swap obj);
		
};
void swap(Swap obj)
{
obj.a=23;
obj.b=45;
	obj.a=obj.a+obj.b;
	obj.b=obj.a-obj.b;
	obj.a=obj.a-obj.b;

	cout<<"Swapping numbers \n"<<"a :"<<obj.a<<endl<<"b :"<<obj.b;
}
int main()
{
	Swap ob;
	swap(ob);
	
	return 0;
}


