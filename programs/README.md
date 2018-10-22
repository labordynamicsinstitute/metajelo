---
title: "Some explorations"
author: "Lars Vilhuber"
date: "October 22, 2018"
output:
  html_document:
    highlight: zenburn
    keep_md: yes
    self_contained: no
    theme: journal
  pdf_document: default
---



## Unreliability of metadata

We picked a few DOIs where we know that reasonable data exists.


### Article 1
The first one is an openICPSR deposit:


|Dataset:                                                                                                                                                                                                                                                                                   |
|:------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
|McKinney, K. L., Green, A. S., Vilhuber, L., Abowd, J. M., & Abowd, J. M. (2017). Replication data: Total Error and Variability Measures for QWI and LODES (Version 1) [Data set]. ICPSR - Interuniversity Consortium for Political and Social Research. https://doi.org/10.3886/e100590v1 |

We note that the archive is listed as 

Attribute         Value                                                                
----------------  ---------------------------------------------------------------------
container-title   ICPSR - Interuniversity Consortium for Political and Social Research 
data-center-id    gesis.icpsr                                                          

neither of which completely describe the particular sub-repository within the ICPSR universe. 
More worringly for our purposes, the license field (optional on DataCite) is empty:

Attribute   Value 
----------  ------
license     NULL  

even though the website lists a license:

![openICPSR license display](../text/images/openicpsr-license-image.png)

### Article 2
The second deposit was picked because it it the most downloaded dataset as of 2018-10-22: 


|Dataset:                                                                                                                                                                                                                                                            |
|:-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
|Harris, K. M., & Udry, J. R. (2008). National Longitudinal Study of Adolescent to Adult Health (Add Health), 1994-2008 [Public Use] (Version v21) [Data set]. Inter-University Consortium for Political and Social Research. https://doi.org/10.3886/icpsr21600.v21 |

The archive's name is again listed as

Attribute         Value                                                         
----------------  --------------------------------------------------------------
container-title   Inter-University Consortium for Political and Social Research 
data-center-id    gesis.icpsr                                                   

The license is again listed as

Attribute   Value 
----------  ------
license     NULL  

Clearly, ICPSR uses a common registration mechanism both for uncurated open deposits (openICPSR) and formal curated archives (ICPSR). 
