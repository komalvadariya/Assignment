
#include<iostream>
using namespace std;

class fun
{
	public:
		inline float Mul(float x,float y)
		{
			return (x*y);
		}
		inline float Cube(float x)
		{
			return (x*x*x);
		}
};
int main()
{
	fun obj;
	float a,b;
	cout<<"Enter two values:"<<endl;
	cin>>a>>b;
	
	cout<<"Multiplication:"<<endl<<obj.Mul(a,b);
	
	cout<<endl;
	
	cout<<"Cubic:\n"<<obj.Cube(a);
	
	
}
