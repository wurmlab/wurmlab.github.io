---
author: yannick
comments: true
date: 2012-02-18 13:48:12
layout: post
slug: oxford-nanopore-sequencing-a-revolution-for-non-model-organisms
title: Oxford Nanopore sequencing - a revolution for non-model organisms?
wordpress_id: 80
categories:
 - labnews
 - genomics
---

Exciting announcement of a new dirt-cheap machine-less DNA sequencing technology. If their promises hold true, this technology will be a game-changer for those of us working with "emerging" non-model organisms because:






  * it supposedly provide 100,000bp long reads. This will eliminate [most scaffolding issues]({{ site.url }}/news/2011-09-21-genome-analyses-for-non-model-organisms/) we have with assembling _de novo _genome sequence.


  * using the [USB thumb-chip version](http://www.nanoporetech.com/technology/minion-a-miniaturised-sensing-instrument), no machine is required. Thus when you are [out in the field](http://vimeo.com/21287431), you can sequence right then and there - a potential workaround for worrying about tissue sample export permits... at least until new regulations appear!




![MinionUSBThumbchipSequencer]({{ site.url }}/img/news/minionUSBThumbchipSequencer.jpeg)




 




High error rates are problematic in short reads because they introduce ambiguity making it [challenging to align and assemble these reads](http://www.nature.com/nbt/journal/v26/n10/abs/nbt1486.html). However, this is much less of an issue with longer reads: A 100,000bp region will remain uniquely identifiable even with [Oxford Nanopore's currently high error rate of 4%](http://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=2&ved=0CCkQFjAB&url=http%3A%2F%2Fwww.bioflukes.com%2Fblogs%2F49&ei=KrJDT4aiN8a6hAf-mKHWBQ&usg=AFQjCNHFjCyLkiKfgel0Oj4mcaTLK9sSig&sig2=eY0nuijSZDGn4-Npuqsfvg). And because for assembly you will use multiple reads representing the same region, error rate of assembled sequence will be low: if two reads overlap, your consensus sequence for the overlapping region will have an error of 4% * 4% = 0.16% (supposing that the errors give lower quality scores than normal sequence). If you have 3x coverage or more, you can resolve most errors unambiguously...
