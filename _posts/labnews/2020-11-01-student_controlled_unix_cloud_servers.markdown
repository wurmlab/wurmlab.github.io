---
author: yannick
comments: true
date: 2020-11-01 11:00:00
layout: post
slug: student_controlled_unix_cloud_servers
title: "UNIX/bioinformatics teaching cloud"
categories:
 - labnews
---

Getting into big data science can be a big leap if you're a biologist who is new to the command-line. We try to cut that down into a series of smaller, more manageable steps.

As part of that, we run a hands-on [genome bioinformatics course](http://wurmlab.github.io/genomicscourse/practicals) that introduces students to UNIX, and covers topics from Illumina read cleaning to genome assembly, annotation, population genomics and genome-wide association mapping. 

For obvious 2020 reasons, we needed an online infrastructure for this, that: 
 - has **manageable costs but sufficient power for genomics analyses**;
 - is easy for students to access autonomously;
 - provides students the flexibility to work when they want (timezones) from where they want;
 - can be easily modified by us as needed.

We built it. 

### Process for students

A student wanting to access their Linux machine must:
* connect to http://switch.genomicscourse.com (currently offline)
* enter their login/password
* click a button to switch on their virtual computer
* this creates their personal virtual computer and shows its IP address & hostname

The student can connect to the computer by ssh, and download or visualise files in a web browser by putting them in a designated folder in their home directory (`~/www`). 

We encourage students to switch their computers off when they are done. However, in case they forget, the computer automatically switches off after 30 minutes of idle time.


### For course administrators

This is great for us as organisers because: 
 - it avoids paying for cloud computing instances that are not being used. 
 - allows us to give students more CPU and RAM than they would otherwise be able to access.
 - we don't have to be physically or virtually available to give students access.
 - ensures that all students use the same setup.


### Interested?

We can potentially deploy our solution for other courses. If you're interested, get in touch. 


### Example screenshots

![Screenshot 2020-10-30 at 19.33.15.png](/img/news/2020-11-01-unix_bioinf_cloud/login.png)

![Screenshot 2020-10-30 at 19.33.50.png](/img/news/2020-11-01-unix_bioinf_cloud/panel.png)

