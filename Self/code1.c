#include <stdio.h>
#include <string.h>

int main()
{
    FILE *fp = fopen("code1.txt", "r");
    char t1[10], t2[10], t3[10], line[50];
    int code, n;

    if (fp == NULL)
    {
        printf("File Opening Error!!!");
        return 0;
    }

    while (fgets(line, 50, fp) != NULL)
    {
        code = -1;
        n = sscanf(line, "%s,%s,%s", t1, t2, t3);
        if (n < 3)
            t3[0] = '\0';  // Set t3 to empty string if not read
        if (n >= 2)
        {
            if ((strcmp(t1, "ADD") == 0) || (strcmp(t1, "SUB") == 0) || (strcmp(t1, "MULT") == 0) ||
                (strcmp(t1, "MOVER") == 0) || (strcmp(t1, "DIV") == 0) || (strcmp(t1, "MOVEM") == 0) ||
                (strcmp(t1, "COMP") == 0))
                code = 0;
            else if (strcmp(t1, "BC") == 0)
                code = 3;
            else if (strcmp(t1, "PRINT") == 0 || strcmp(t1, "READ") == 0)
                code = 1;
            else if (strcmp(t2, "DC") == 0 || strcmp(t2, "DS") == 0)
                code = 4;
            else
                printf("Invalid Mnemonic %s\n", t1);
        }
        else if (n == 1)
        {
            if (strcmp(t1, "STOP") == 0)
                code = 2;
            else
                printf("Invalid Mnemonic %s\n", t1);
        }
        else
        {
            printf("Invalid Line : %s\n", line);
        }

        switch (code)
        {
        case 0:
            if ((strcmp(t2, "AREG") == 0 || strcmp(t2, "BREG") == 0 || strcmp(t2, "CREG") == 0 || strcmp(t2, "DREG") == 0) && strlen(t3) > 0)
            {
                // Valid case
            }
            else
            {
                printf("\n Invalid Mnemonic\n");
            }
            break;

        case 1:
            if (strlen(t2) > 0)
            {
                // Valid case
            }
            else
            {
                printf("Invalid Mnemonic Statement %s\n", line);
            }
            break;

        case 2:
            break;

        case 3:
            if ((strcmp(t2, "LT") == 0 || strcmp(t2, "LE") == 0 || strcmp(t2, "EQ") == 0 || strcmp(t2, "GT") == 0 || strcmp(t2, "GE") == 0 || strcmp(t2, "ANY") == 0) && strlen(t3) > 0)
            {
                // Valid case
            }
            else
            {
                printf("Invalid Mnemonic Statement : %s\n", line);
            }
            break;

        case 4:
            if (strlen(t3) > 0)
            {
                // Valid case
            }
            else
            {
                printf("Invalid Mnemonic Statement : %s\n", line);
            }
            break;

        default:
            printf("Invalid Mnemonic Statement: %s\n", line);
            break;
        }
    }

    fclose(fp);
}

