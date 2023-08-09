#include<bits/stdc++.h>
using namespace std;

int main(){
    int x,y;
    cin>>x>>y;
    int totall = fib(5,10);

}

int fib(int x,int y){
    if(x==y){
        return 0;
    }
    int prev=0;
    int curr =1;
    int next=0;
    int count =0;
    for(int i=2;i<=y;i++){
        next=curr+prev;
        prev=curr;
        curr=next;
        if(curr>=x){
            count++;
        }
    }
}
