---
author: yannick
comments: true
date: 2018-10-09 14:00:00
layout: post
slug: better_genomics_analysis_code_at_IUSSI
title: "IUSSI conference talk: Better analyses for social insect genomics"
categories:
 - labnews
---


## Social insect biology is now a data science!

I (Yannick) spent the week of August 5th at the 18th [Congress of the International Society for the Study of Social Insects](https://iussi.org) in Guarujá, Brazil. This is a big quadrennial conference uniting researchers from around the world who study ants, bees, wasps, termites and a few other animals.

Part of my trip was funded by the [Software Sustainability Institute](https://www.software.ac.uk) which lobbies for and helps people do better research through improving software. Hence this blog post.

The study of social insects has traditionally used approaches including behavioral observation and taxonomic sampling, with genetic analyses becoming more common since the mid 2000s. A pleasant surprise at the conference was the [recent increase in highly molecular, genome-wide approaches](https://wurmlab.github.io/publications/sannewurm2015myrmecologicalgenomics.pdf) where whole or partial genomes or transcriptome sequences of many individuals are obtained in order to make specific comparisons within species, or sometimes also between species.

This disruptive shift is largely due to the **50,000-fold drop in DNA sequencing costs** over the past 10 years. See [&Eacute;meline](/team/efavreau)'s recent review on the [genes and processes underpinning evolution of social behavior in ants](https://doi.org/10.1016/j.cois.2017.12.001).

### With great power comes great responsibilities.

A major challenge for small research labs now wielding in large genomic datasets is that it is easy to make a small mistake that [has](http://science.sciencemag.org/content/314/5807/1856.full) [high](http://science.sciencemag.org/content/351/6275/aaf3945) [costs](https://genomebiology.biomedcentral.com/articles/10.1186/s13059-015-0649-6).

In light of this, as part of a workshop on genomics approaches organised with Tim Linksvayer and Alex Mikheyev, I gave an overview of some of the lessons we can transfer from the worlds of "other" data sciences to our expanding world of social insect genomics. This includes:
 - writing analysis code for humans;
 - respecting style guides for code (e.g., [R style guide](http://adv-r.had.co.nz/Style.html)), and for [how to structure a genomic analysis](http://wurmlab.github.io/news/2018-10-01-project_structures/);
 - benefits of peer-reviewing code, and of peer-coding sessions;
 - using specific tools that increase productivity while decreasing risks (rmarkdown, fat machines, snakemake/nextflow);
 - benefits of visualising data in many different manners. Typically when people learn to do basic linear models they learn the importance of visually inspecting some plots (e.g. qqplot, residuals). But when we end up performing tens of thousands of such analyses (e.g. one for each gene or one for each SNP), many forgo doing this.

<a href="https://www.slideshare.net/yannickwurm/2018-08reproducible-research" title="2018 08-reduce risks of genomics research" target="_blank" rel="noopener">My slides are here</a>:


<iframe src="https://www.slideshare.net/slideshow/embed_code/key/1HU7EgUvpIdMj8" title="Steps to avoid having to retract your analysis" class="mx-auto d-block" width="400" height="326" style="border:1px solid #CCC; border-width:1px; max-width:100%; margin:5px auto;" allowfullscreen> </iframe>
<div style="margin-bottom:5px"> </div>

---

It is worth highlighting three additional, important points raised during the congress that have more to do with interpretation, vocabulary and  experimental design than anything technical:

  1. There is occasional misconception/mislabeling that extant species may be representative of species that lived in the past. No: just as much time has passed since the most recent common ancestor of all ants and *Pheidole pallidula* ants as passed since the most recent common ancestor of all ants and any particular *Harpegnathos saltator*. Similarly, no current species of great ape is "more similar" to any ancestor of humans - all are equally similar to their shared common ancestor.
 2. The definition of eusocial has become too fuzzy to be useful. **Superorganismality** is a much more  precise and relevant concept that clearly identifies irreversible evolutionary transitions from context‐dependent reproductive altruism to unconditional differentiation of permanently unmated castes. See also Koos' paper [Superorganismality and caste differentiation as points of no return: how the major evolutionary transitions were lost in translation](https://onlinelibrary.wiley.com/doi/full/10.1111/brv.12330).
 3. Comparisons (e.g. of genome content) between two species are often confounded by many differences other than the first two that come to mind (ecology, lifespan, environment, demographic history etc...).


A fun and highly stimulating conference.
