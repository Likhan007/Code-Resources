#include<iostream>
#include<bits/stdc++.h>
#include<string>
//#include<vector>
using namespace std;

int main()
{

    vector<int> v1={1,2,3,4,10};
    vector<string> s={"Apple","Ball","Cat","Dog"};

    ///accessing vector elements

//     cout << v1[1] << endl;
//     cout << v1.front() << endl;
//     cout << v1.back() << endl;


    ///common vector methodes;


//    v1.push_back(9);
//    v1.pop_back();
//    v1.shrink_to_fit();
//
//    cout << v1.capacity() << endl;

    ///Inserting and Erasing elements;

//    v1.insert(v1.begin() ,420);
//    cout << v1.front() << endl;
//    v1.erase(v1.begin());
//    cout << v1.front() << endl;

    /// iterating through vectror

//    for(int i=0 ; i<v1.size() ; i++)
//    {
//        cout << v1[i] << endl;
//    }


                // OR ANOTHER ONE

    for(auto itr = s.begin(); itr!=s.end(); ++itr)
    {
        cout << *itr << endl;
    }


    return 0;
}
