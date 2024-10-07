#include<stdio.h>
int main()
{
    FILE *fp;
    int opcode,reg,reg1[4],opnd,pc=0,mem[1000];
    fp=fopen("sub.txt","r");
    if(fp==NULL)
    {
        printf("File openning error:");
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

        switch (opcode)
        {
        case 0:
                printf("Comaback soon");
                return 0;        
            break;
        case 2: reg1[reg]-=mem[opnd];
            break;
        case 4:reg1[reg]=mem[opnd];
            break;
        case 5:mem[opnd]=reg1[reg];
            break;
        case 9:
            printf("Enter the Number : ");
            scanf("%d",&mem[opnd]);
            break;
        case 10:
            printf("The result = %d\n",mem[opnd]);
            break;
        
        default:
            break;
        }
        pc++;

    }
    fclose(fp);
    return 0;
}