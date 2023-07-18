#include <iostream>
using namespace std;
int main()
{
    cout<< "Hello, world!\n";
    cout<<"Hola\n";
    return 0;
}

$numero = 0;

$numero = htmlspecialchars($_POST["numero"]);

if(($numero % 2) == 0){
    echo $numero . ' es par';
}else{
    echo $numero . ' es impar';
}