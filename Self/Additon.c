#include<stdio.h>
#include<stdlib.h>
int main()
{
  FILE *fp;
   
  int mem[1000],reg[4],reg1,opcode,opnt,pc=0;
  
  fp=fopen("add.txt","r");
  
  if(fp==NULL)
  {
    printf("File could not found");
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
      case 4: reg[reg1]=mem[opnt];
              break;
      case 5:mem[opnt]=reg[reg1];
              break;   
      case 8:reg[reg1]/=mem[opnt];
              break;
      case 9:printf("Enter the number=");
             scanf("%d",&mem[opnt]);
              break;     
      case 10:printf("Addition=%d\n",mem[opnt]);
              break;
        }
      pc++;
    }
    return 0;
 }
      
