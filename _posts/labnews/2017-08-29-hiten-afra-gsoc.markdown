---
layout: post
author: Hiten Chowdhary
title: Performance and user centric updates to Afra's annotation editor
modified: 2017-08-29
categories:
 - labnews
image:
  feature: gsoc.png
  credit: Google
  creditlink: http://summerofcode.withgoogle.com/
comments: true
share: true
---

*Written by [Hiten Chowdhary](https://github.com/aniarya82), cross-posted from (http://www.hiten.io/blog/articles/gsoc-17/)[http://www.hiten.io/blog/articles/gsoc-17/]*
 
This is a summary of the work done during this summer as part of Google Summer of Code 2017 under the organisation Open Genome Informatics under the guidance of my mentors Yannick Wurm and Anurag Priyam.

## About the project
*Problem Statement*: Performance and user centric improvements to Afra’s annotation editor. 

*Brief explanation*: Gene prediction models are visually inspected and manually corrected for any mistakes. Curation of gene models is carried out on Afra, a crowdsourcing platform. Afra has two models - an annotation editor and a task processor. The annotation editor is build using JBrowse and WebApollo. This project focuses on migrating Afra to the latest JBrowse and getting a unit test suite ready to optimize the annotation editor and ease the learning curve of manual curation.

## Project Summary
Before the project started, I was fairly acquainted with javascript and ruby. Initially, I got familiar with JBrowse's codebase and understood the upgrades along with changes made in different versions. We planned to get the test suite ready before the migration of Afra takes place. With the test suite in place, the migration would take place without any hassle. One can run tests to ensure annotation editing functionality is working properly. 

For migration of Afra, we took a look at JBrowse and Afra’s codebase. We examined the files added to Afra’s codebase, which  exhibited the annotation editor functionality along with additional features of Afra. These differences in codebase were carried over to JBrowse as a plugin. This provided the annotation editor functionality which could be easily plugged into JBrowse or any other Genome browser.

## Test Suite
Annotation editor uses Jasmine for unit tests. Jasmine was easy to setup and can be executed using a simple web server. I examined the already implemented tests for different functionalities of Afra. This provided me an insight into the processing of tests implemented in Afra. Further, I added some tests for the annotation editor functionality. These tests were:
- Flip strand : Checks whether the annotation editor is correctly changing the genome’s strand. 
- Set longest ORF: Checks whether annotation editor adequately implements the longest open reading frame for a given transcript. 
- Mark non canonical splice sites: Checks whether the annotation editor is duly marking the non canonical splice sites for the transcript. 
- Mark non canonical translation start site: Checks whether the annotation editor is duly marking the non canonical start translation sites for the transcript.
- Mark non canonical translation stop site: Checks whether the annotation editor is duly marking the non canonical splice sites for the transcript.
- Filter features: Checks whether the annotation editor is properly filtering a given type of transcript (say exons) from a given set of transcripts. 
- Copy feature: Checks whether annotation editor is making an exact copy of features passed to it.
- Merge exon: Checks whether annotation editor suitably merges two given exons and returns a new transcript. 
- Create transcript: Checks whether annotation editor creates a new transcript using Simple feature, for the provided features. 
- Resize exon: Checks whether annotation editor adequetely resizes the exons. 
- Get CDNA coordinates: Checks whether the annotation editor provides correct cdna coordinates for a given transcript. 
- Delete exon: Checks whether annotation editor properly deletes a exon from a given transcript.

Here is the [link](https://goo.gl/sCujXe) to my commits for the test suite.

## Migrating Afra to latest JBrowse
We started building a plugin for the JBrowse to carry over the annotation editor functionality to JBrowse. This would provide Afra’s annotation edition functionality to use the latest JBrowse features, making the migration process smoother. The plugin development took place in the following steps :-
- Edit track implementations : First task was adding a new track to JBrowse’s browser for plugin's initialization. 
- Adding drag and drop feature : Next task was including proper jquery scripts and modifying the properties of existing tracks, so that they can be dragged along the y axis and dropped to edit track for annotating them. 
- Edit track drop capabilities : Subsequently, we initialized the edit track and made it capable to accept the incoming features and make them available for annotation editor for further modifications.
- Accessing annotation editor’s functionality : Now that we could successfully dragged and dropped a feature in edit track, it was time to use the annotation editor functionality to make required changes to the track. This list of functionality is available upon right clicking the feature in edit track.
- Getting right click menu items working: By this stage we had got a front end in place to access the annotation editors functions. Now it was time to get those functionality such as get sequence, send to Gene Validator, resize exon, etc ready.

Now we had a basic plugin in place that had implemented the basic annotation editing functionality. ([commit](https://goo.gl/wFVf5o))

Now additional features of Afra had to be carried over. These feature are :-
- We implemented triple click on track to zoom to base pair level directly. ([commit](https://goo.gl/J4LTuJ))
- Following this, we replaced the JBrowse’s reference sequence track with Afra’s. Now, when the feature in edit track is selected, the corresponding track in reference sequence gets highlighted. ([commit](https://goo.gl/LQBMJF))
- We added a feature to view the residues (actual genomic sequence ‘atgc’) of the feature in edit track when it is selected. ([commit](https://goo.gl/J4LTuJ))
- We implemented an additional feature to validate the feature dropped in the edit track. We checked for non canonical translation start and stop sites and marked them with orange exclamation marks. This will help the user easily look for non canonical splice sites without looking into the sequence of the feature. ([commit](https://goo.gl/MrZFYC))

Finally, we had successfully implemented the annotation editor of Afra as a plugin of JBrowse, along with extra features of Afra too. Further, to test whether all the annotation editing functionalities are working properly we implemented the test suite for the plugin.([commit](https://goo.gl/wFVf5o))
