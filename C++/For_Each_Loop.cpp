#include<iostream>
#include<bits/stdc++.h>
#include<vector>
#include<string>
using namespace std;
int main()
{


    char str[5]={'a','b','c','d'};
    vector<char>vtr={'x','y','z','1','2'};
    vector<string>vtr2={"HELLO","I","AM","LIKHAN"};






    for(char i : str)
    {
        cout << i << endl;
    }

    cout <<endl;

    for(char i : vtr)
    {
        cout << i << endl;
    }

    cout <<endl;

    for(string i : vtr2)
    {
        cout << i << endl;
    }

    cout <<endl;

    for(string i : {"TROYEE","IS","MY","BEST", "FREIND"})
    {
        cout << i << endl;
    }

    cout <<endl;

    for(auto i : {"TROYEE","IS","MY","BEST", "FREIND"})     // auto -- eta auto data type detect kore
    {
        cout << i << endl;
    }



    return 0;
}


