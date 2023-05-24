/*Write a program to concatenate the two strings using Operator Overloading */

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
                        cout<<"\n Enter String:";
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

        
        cout<<"\n";
        str3=str1+str2;         
        cout<<"\n\n Concatenated String:";
        str3.display_string();
        
        
        return 0;
    }    

       
