# Python script to concatenate metajelo spreadsheets

This function should combine metajelo spreadsheets, with some limitations:

- For now, the usage is command line only. Let me know if you want some other way to run it (though I would suggest keeping it as it is).
- The program appends the data in new columns, but each column is labeled "data" in the first row. If you want more informative labels, that can be done with a few tweaks.
- The program appends only, and does not overwrite at the moment. After adding point 2, it should be possible to do a conditional overwrite only if no column with the same label is already present (given that labels are unique, e.g., basing them on the name of the input excel file).
- It is written for Python 3.x


Syntax: `python append_excelColumns2.py ifile ofile isheet osheet`


