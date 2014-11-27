---
author: yannick
comments: true
date: 2005-03-02 10:23:40
layout: post
slug: refined-nucleotide-blast-matrix
title: 'BLAST woes: Refined nucleotide blast matrix'
wordpress_id: 45
categories:
 - oldblogarchive
---

A colleague has modified genomic fire ant sequences. For most of them, BLAST will not turn up a homologue.

This is very probably linked to the fact that her sequences are modified: the bisulfite treatment she'd applied to them changes non-methylated Cs to Ts. So her sequences are mainly made up of As, Gs, and Ts, the Ts being way over-represented.

blastn is not good at finding these sequence's homologues:



	
  * blastn searches for homologous sequences by trying to identify windows of 12 identical nucleotides.

	
  * for blastn, a C-T mismatch is just like any other mismatch. For bisulfite treated sequences, we know that many Ts are in fact Cs which have been modified by chemical treatment. Thus we should penalize them less.

	
  * blastn is optimized for speed, not flexibility. That means the window-size and scoring matrix are hard-coded - the user cannot edit them.


Poking around on the internet for alternatives did not turn anything up, so I asked on a [bioinformatics.org](http://www.bioinformatics.org) mailing list. Peter Rice at EBI summed up the workaround hack:
>1. Build your blast database as protein
>
>2. Give your matrix a name that matches one of the blast protein matrix names (!)
>
>3. Put in the matrix values you want
>
>4. Remember that you are now using blastp (protein search) so you can only use a short wordsize - I am guessing you have short sequences anyway so this should not be a problem
>
>5. Remember that BLAST does local alignment.
>
>6. Remember that your scores will be making some wrong assumptions about using proteins. You should still find the hits you are looking for.

Contacting NCBI confirmed this... Wayne Matten pointed me towards a METHODS [paper](http://blast.wustl.edu/doc/ntmats.pdf) describing *The Use of BlastP For Nucleic Acid Searches*. He also indicated [example matrices](ftp://ftp.ncbi.nlm.nih.gov/blast/matrices/).
So the next step was downloading and compiling [NCBI Blast](http://www.ncbi.nlm.nih.gov/BLAST/) sources, and getting [Apple-Genentech's G5-optimized Blastall](http://www.apple.com/acg/). Then for each nucleotide sequence database I wanted to blast against, I had to:

	
  * call formatdb (supplied with ncbi's Blast: `~/bin/blast-2.2.10/bin/formatdb -i Group10_20050120.fa -l Group10.formatdb.log -t "Apis Contig Group10"`

	
  * blast my sequences against this database: `~/bin/blastall-2.2.9-apple-genentech -p blastp -d genomes/Amel20050120-freeze/contigs/Group10_20050120.fa -i ~/treatedSequence.fasta -o /Users/admin/Documents/Perl/generated\ data/heleneTest.2005-feb-25-mini -M BLOSUM80 -F F`


_ Note: `-F F` eliminates filtering of reduced complexity regions (repeats). `-M BLOSUM80` specifies my custom matrix located in the directory specified in my `~/.ncbirc`[NCBI]
Data=/Users/admin/Documents/utils/blast_data_

For testing purposes, I used a subset of Apis mellifera's 20050120 release: just one contig, vs. a sequence on which I simulated bi-sulfite treatement.
This let me test the custom scoring matrix to give an increased difference in score between my test sequences real genomic and other similar sequences. Changes made included:



	
  * not penalizing Ns or other non-ACGT bases

	
  * giving increased importance to conserved C-C alignments (rare since in in a lightly methylated sequence, most Cs are transformed to Ts)

	
  * not penalizing C-T alignments when C is in a "normal" sequence and T is in bisulfite-treated sequence.

	
  * reducing positive influence of T-T alignments (in bisulfite-treated sequence, T could really be a modified C).

	
  * Venues not explored include:

	
  * modifying influence of transversions and transitions, since the probability of their occuring differs, especially between related species.


I thus used the following custom matrix:

`
# Custom nucleotide alignment matrix for bisulfite-treated query sequence
A R N D C Q E G H I L K M F P S T W Y V B Z X *
A 5 0 0 0 -4 0 0 -4 0 0 0 0 0 0 0 0 -4 0 0 0 0 0 0 0
R 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
N 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
D 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
C -4 0 0 0 20 0 0 -4 0 0 0 0 0 0 0 0 -4 0 0 0 0 0 0 0
Q 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
E 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
G -4 0 0 0 -4 0 0 5 0 0 0 0 0 0 0 0 -4 0 0 0 0 0 0 0
H 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
I 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
L 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
K 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
M 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
F 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
P 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
S 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
T -4 0 0 0 0 0 0 -4 0 0 0 0 0 0 0 0 2 0 0 0 0 0 0 0
W 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
Y 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
V 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
B 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
Z 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
X 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
* 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
`
Overall, these modifications resulted in an increased sensitivity.
One catch I hadn't anticipated was that blastp searches only the "forward" strand (what is a protein's reverese complement?). So an exhaustive serach required establishing reverse-complement databases. I reversed-complemented my fasta files with the following perl code:
`
#!/usr/bin/perl -w
# PROGRAM: reverseComplementOfInputFasta.pl
# PURPOSE : Given a fasta sequence database, creates it's sister with reverse-complements. Usefull if using BLASTP for nucleotide alignments.
# AUTHOR : Yannick Wurm, yannick.wurm@unil.ch
# CREATED : Mar 01 2005 `

use warnings;
use strict;
use Bio::Seq;
use Bio::SeqIO;

# get command-line arguments, or die with a usage statement
my $usage = "reverseComplementOfInputFasta.pl infile outfile\n";
my $infile = shift or die $usage;
my $outfile = shift or die $usage;

my $seq_in = Bio::SeqIO->new('-file' => "< $infile",
'-format' => 'fasta');
my $seq_out = Bio::SeqIO->new('-file' => ">$outfile",
'-format' => 'fasta');

# write each entry in the input file to the output file
while (my $inseq = $seq_in->next_seq) {
my $reversecomplement = $inseq->revcom;
my $id = $inseq->display_id() . "revcom";
$reversecomplement->display_id($id);

$seq_out->write_seq($reversecomplement);
}

exit;
