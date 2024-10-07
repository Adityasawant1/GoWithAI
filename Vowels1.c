#include<stdio.h>
#include<ctype.h>
int main()
{
    FILE *fp;
    char ch;
    int count=0;
    fp=fopen("abc.txt","r");
    if(fp==NULL)
    {
        printf("File not found");
        return 0;
    }else
    {
        while((ch=fgetc(fp))!=EOF)
        {
            ch=tolower(ch);
            if(ch=='a' || ch=='e' || ch=='i' || ch=='o' || ch =='u')
            {
                count++;
            }
        }
        printf("\n count of vowels in file=%d",count);
    }
    fclose(fp);
    return 0;
}
