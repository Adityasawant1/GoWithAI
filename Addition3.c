#include<stdio.h>
int main()
{
    FILE *fp;
    int opcode,reg,reg1[4]={0},mem[1000],pc=0,opnd;
    fp=fopen("add.txt","r");
    if(fp==NULL)
    {
        printf("File openning error");
        return 0;
    }
   
        while((fscanf(fp,"%d",&mem[pc]))!=EOF)
        {
            pc++;
        }
        pc=0;
        while(1)
        {
            opcode=mem[pc]/10000;
            reg=(mem[pc]%10000)/1000;
            opnd=mem[pc]%1000;
            switch(opcode)
            {
                case 0:printf("\n Comeback soon");
                    return 0;
                case 1:reg1[reg]+=mem[opnd];
                    break;
                case 4:reg1[reg]=mem[opnd];
                    break;
                case 5:mem[opnd]=reg1[reg];
                    break;
                case 9:printf("Enter the number : ");
                       scanf("%d",&mem[opnd]);
                    break;
                case 10:printf("Addition of two number :%d",mem[opnd]);
                    break;
                default:
                    printf("Invalid Opcode");
                    break;
            }
             pc++;
        }
       
    
    fclose(fp);
    return 0;
}