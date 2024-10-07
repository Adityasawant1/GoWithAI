#include<stdio.h>
#include<stdlib.h>
#define P 0.5
int main()
{
  FILE *fp;
  int mem[1000],opcode,opnt,reg[4],reg1,pc=0;
  
  fp=fopen("triangle.txt","r");
  
  if(fp==NULL)
  {
    printf("file not found");
    return 1;
  }
  while(!feof(fp))
  {
    fscanf(fp,"%d",&mem[pc]);
    pc++;
  }
  pc=0;
  while(pc<1000 && mem[pc]!=0)
  {
    opcode=mem[pc]/10000;
    reg1=(mem[pc]/1000)%10;
    opnt=mem[pc]%1000;
    
    switch(opcode)
    {
      case 00:return(0);
              break;      
      case 1: reg[reg1]+=mem[opnt];
              break;
      case 2: reg[reg1]-=mem[opnt];
              break;
      case 3: reg[reg1]*=mem[opnt];
              break;
      case 4: reg[reg1]=P;
              break;
      case 5:mem[opnt]=reg[reg1];
              break;   
      case 8:reg[reg1]/=mem[opnt];
              break;
      case 9:printf("Enter the number=");
             scanf("%d",&mem[opnt]);
              break;     
      case 10:printf("Area of Triangle=%d\n",mem[opnt]);
              break;
      }
    pc++;
  }
return 0;
}
        
  
  
