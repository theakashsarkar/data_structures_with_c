#include <stdio.h>
#include <math.h>

int convert(long long);
int main ()
{
    long long n = 1010;
    ///printf("Enter a binary number");

    printf("%lld in binary = %d in decimal", n, convert(n));
    return 0;
}
int convert(long long n)
{
    int dec = 0, i = 0, rem;
    while(n!=0)
    {
        rem = n % 10;
        n /= 10;
        dec += rem * pow(2, i);
        ++i;
    }
    return dec;
}