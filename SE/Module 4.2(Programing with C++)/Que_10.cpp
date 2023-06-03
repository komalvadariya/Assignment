
#include<iostream>
#include<string.h>
using namespace std;

class String
{
        public:
                char name[20];
        public:
                void sample_string() 
                {
                        cout<<"Enter String:"<<endl;
                        cin>>name;
                }
                void display_string() 
                {
                        cout<<name;
                }
                String operator+(String x)  
                {
                        String s;
                        strcat(name,x.name);
                        strcpy(s.name,name);
                        return s;
                }
};

int main()
{
        String str1, str2, str3;

        str1.sample_string();
        str2.sample_string();

        
        cout<<endl;
        str3=str1+str2;         
        cout<<"Concatenated String:"<<endl;
        str3.display_string();
        
        
        return 0;
    }    

       
