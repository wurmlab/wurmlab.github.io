---
author: yannick
comments: true
date: 2018-10-01 14:00:00
layout: post
slug: project_structures
title: "Project structures for genomics analyses"
categories:
 - labnews
---


**How do you structure your files and folders for genomics analyses?**

One challenge is that many analyses actually require multiple steps, thus having all steps in one place becomes a mess. 

So we should structure our analyses **across multiple folders**. But how should we **name them** and keep track of their order?

Another (key) challenge in performing genomics analyses is that we often have to **perform analyses multiple times**. 

 * we need to try three different approaches because we don't know which will perform best;
 * or we want to try a new version of the analysis software;
 * or we want to start with a small "test" dataset before scaling up to the full data;
 * or we want to redo everything on a completly different dataset;
 * or a reviewer asks for a minor adjustment in analysis or an additional plot on the data we analyzed  months/years ago.
 
 
## So how do we keep track of the different steps and versions of analyses?
 
The standard approach we use for all projects in the lab is derived from ideas initially proposed by William Noble in [*A Quick Guide to Organizing Computational Biology Projects*](https://doi.org/10.1371/journal.pcbi.1000424). That initial model has been adjusted based on our experience of dozens of projects over the years, as well as discussions with [Julien Roux](https://scholar.google.co.uk/citations?hl=en&user=o9QnnGAAAAAJ&view_op=list_works&sortby=pubdate), [Anurag Priyam](/team/priyam), and [Roddy Pracana](/team/rpracana/).


[Stable link here.](https://github.com/wurmlab/templates/blob/master/project_structures.md)

Best to just illustrate with an example of how this works at the simplest level.

## Example: 

```
2016-04-14-bombus_variant_calling
├── input
│   ├── 2016-04-14-bombus_raw_28_samples
│   │   ├── sample1.fq    #  could link to /data/SBCS-WurmLab/archive/db/genomic/reads/...                 
│   │   ├── sample2.fq 
│   │   ├── sample3.fq
│   │   ├── bombus_genome.fa -> ~/db/genomic/B_terrestris/Bter20110317-genome.fa
│   │   └── WHATIDID.sh  # list of ln -s, cp or wget/curl commands 
│   └── 2016-04-16-cleaned_reads
│       ├── sample1.fq.gz   -> ../../results/2016-04-14-read_cleaning/results/sample1.clean.fq.gz
│       ├── sample2.fq.gz   -> ../../results/2016-04-14-read_cleaning/results/sample2.clean.fq.gz
│       ├── sample3.fq.gz   -> ../../results/2016-04-14-read_cleaning/results/sample3.clean.fq.gz
│       └── WHATIDID.sh  # just the ln -s commands.
├── results
│   ├── 2016-04-14-read_cleaning
│   │   ├── input        -> ../../input/2016-04-14-bombus_raw_28_samples
│   │   ├── results                                # only few files here
│   │   ├── sratoolkit   -> ../../soft/sratoolkit-2.4.2/bin/
│   │   ├── tmp                                    # use real scratch dir if more appropriate
|   |   ├── ENVIRONMENT.sh                         # if any particular software, modules or containers need to be loaded
│   │   └── WHATIDID.txt                           # or equivalent .sh or .Rmd (or knitr/jupyter)
│   ├── 2016-04-16-mapping_to_reference
│   │   ├── input        -> ../../input/2016-04-16-cleaned_reads
│   │   ├── results                                # only few files here
│   │   ├── tmp                                    # use real scratch dir if more appropriate
|   |   ├── ENVIRONMENT.sh                         # if any particular software, modules or containers need to be loaded
│   │   └── WHATIDID.txt                           # or equivalent .sh or .Rmd (or knitr/jupyter)
│   └── WHATIDID.txt                               # for overall rationale
└── soft
    ├── sratoolkit-2.4.2                           # if installed locally
    ├── bwa              -> /share/apps/sbcs/bwa/0.6.2/bin/bwa
    └── # links to other software if needed
```


## Explicit (partial) conventions
Conventions include: 
* key directory names begin with YYYY-MM-DD date, followed by _underscore_delimited description;
  For example,  a new project starting today should begin as follows: 2018-10-10-a_self_explanatory_name;
* all subdirectory names should be self-explanatory;
* link to files when appropriate. this can save tons of space AND reduce ambiguity/risks;
* every `results` dir should contain a link named `input` to an input directory with a self explanatory name;
* every directory in which you did something should contain a `WHATIDID.txt` (or an equivalent ruby/perl/jupyter/R/knitR/Sweave/Rmarkdown script) that contains all relevant commands. required to get from `input` to `results`;
* once you have created an "input" (i.e. "data") folder, make it read-only because you don't want any accidental edits while you are running your analysis.`


