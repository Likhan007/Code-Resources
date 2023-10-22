#include<iostream>
#include<bits/stdc++.h>
#include<vector>
#include<string>
using namespace std;
int main()
{

    set <char> s={'a','b','c','c','a'};

    for(auto itr=s.begin() ; itr!=s.end() ; itr++)
    {
        cout << *itr << endl;
    }

        //                      inserting and deleting element

    s.insert('x');

    s.erase('c');

        //                      set contains element

    if(s.find('b')==s.end())
        cout << "Could not find b" << endl;
    else
        cout << "b found" << endl;


    ///                                         PRACTICAL SET EXAMPLE


    //                          1 .      Find the distinct characters of a string  :

    string str="My country's name is Bangladesh";
    set <char> distinct;

    for(int i=0 ; i<str.size() ; i++)
    {
        distinct.insert(str[i]);
    }

    cout << "BREAK POINT HERE" << endl;

    for(char f : distinct)
    {
        cout << f << endl;
    }



//    for(auto q=distinct.begin() ; q!=distinct.end() ; q++);
//    {
//        cout << *q << endl;
//    }





    return 0;
}

