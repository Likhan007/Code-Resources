#include<bits/stdc++.h>
using namespace std;
int main()
{



                ///STRING INPUT
    string s;
    getline(cin , s);
                ///STRING LENGTH
    int n = s.length();
    cout << n << endl;



                ///STRING RESIZE
    s.resize(s.length()+3,'y');
    cout << s << endl;
    s.resize(5);
    cout << s << endl;



                ///STRING CONCATENATION
    string a="hello";
    string b="world";
    string c = a+b;
    cout << a + " " +b;



                ///CONTINUOUS STRING CONCATENATION
    string f,temp;
    while(true)
    {
        getline(cin , temp);
        if(temp=="!"){
            break;
        }
        f+=temp;
    }
    cout << f << endl;




                ///STRING SUBSTR

    string x =  "Hello World!";
    cout << x.substr(6,5) << endl; // substr(beginning_index , number_of_indexes)
    cout << x.substr(6) << endl; // substr(beginning_index) will print till end




                ///FINDING SUBSTRING IN STRING
    string str = "abc abc abc";
    cout << str.find("abc") << endl;    // Will return -1 if not found
    cout << str.find("abc" , 2) << endl;    // starting from index 2



                ///ASCII MANUPULATION
    string sr="abc";
    for(int i=0 ; i<sr.length() ; i++)
    {
        sr[i]-=32;
    }
    cout << sr << endl;


                ///STRING INSERTION (MANUAL)
    string words="ONE TWO FOUR";
    string word="THREE";

    words = words.substr(0,7) + " " + word + " " + words.substr(8,4);

    cout << words << endl;



                ///STRING INSERTION (FUNCTION)
    string wo = "ONE TWO FOUR";
    wo.insert(8,"THREE ");
    cout << wo << endl;



                ///STRING SUBSTRACTION
    string ums = "I um Don't um want um to um talk um like um this.";
    string target = "um";

    while(ums.find(target) > -1 || ums.find(target) < ums.length())
    {
        int found_at =ums.find(target);
        ums = ums.substr(0 , found_at) + ums.substr(found_at+target.length()+1);
    }

    cout << ums << endl;




                ///REMOVING SUBSTRING FROM STRING USING INDEX
    string av = "THIS IS JUST A DEMO TEXT";
    av.erase(8,5);
    cout << av << endl;



                ///POPPING LAST CHARACTER FROM STRING

    string al = "ABCDEF";
    al.pop_back();
    cout << al << endl;


    return 0;
}
