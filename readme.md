gayhomophobe.com maintenance howto:


A. Twitter monitoring
===

1. log in to tweetdeck
2. add @gayhomophobe as an account you have team permissions on
3. add column for search 'gay homophobe' and 'gayhomophobe.com' to monitor tips & mentions
   * occasionally mentions are quotable. fav them and consider adding to the quotes section of the page



B. Candidate validation
===

a) IGNORE party affiliation etc. Must be individualized assessment.
---

For all steps except gay/bi verification, set google searches to have time span that ends at least a week BEFORE disclosures. Post-disclosure sources are not reliable.

All steps must be YES to proceed.


b) Do they have significant social or political power?
---

Yes if:

* elected official who has power over LGBT issues
  * e.g. state legislator, mayor or higher
* religious official with significant congregation
* substantial personal power to change policy

No if:

* official with no policy-making power
  * e.g. minor staffers; lawyers required to act at client's direction; tiny profile; newbie priest; etc
* random blogger with no real reach


c) Did they use that power anti-LGBT?
---

DO NOT assume this of Republicans; many are just fiscal conservatives. Must have positive individualized confirmation.

https://ballotpedia.org is a good tool. It links to various orgs' ratings, which have per-bill breakdowns. Find ones about LGBT issues and see how they voted. Verify that if possible, but if yes it's definitive.

Yes if:

* personally voted anti-LGBT
  * this includes eg bills authorizing discrimination under guise of "religious freedom" etc.
  * this does NOT include non-LGBT-specific issues, eg abortion, immigration, taxation, etc etc
* personally spoke out anti-LGBT, eg priests.
* otherwise took action that was
  * substantive - it has to have (or have had real potential to) significantly affect people
  * personal - they did it themselves, not their boss or party or friends or church or whatever
  * discretionary - they had discretion to do it or not do it; they weren't required to (e.g. lawyers representing client are not discretionary)

This should be unambiguous. Remember to date-limit google searches. Anything post-outing that claims they were anti-gay has ZERO CREDIBILITY, but might be useful for pointers to sources that predate the outing.



d) Were they closeted and gay/bi?
---

This is necessarily a subjective determination. We don't need it to be a jury verdict or admission, but also it has to rise above the level of purely speculative and unsourced.

Yes if:

* admission
  * note rainbow star section below
* credible, linkable source with personal knowledge
  * reduce credibility if source has something to gain or other ulterior motive, e.g. adversary in litigation or political enemy
* credible, public law enforcement source
  * give VERY LOW credibility to anonymous law enforcement leaks. We do not want to encourage this type of source.
* other person involved is post-pubescent (~16+; assume yes if in high school)
* involved clearly sexual acts
  * includes any activity that can be described as "___ sex"; sexting; obvious come-ons; etc.

No if:

* other person involved is pre-pubescent (~≤15). Pedo ≠ homo. Ignore pedos.
* claim is not credible
  * however, monitor for followup
* candidate is "ex-gay" but has not *acted* gay; an "ex-gay"'s admissions of same sex attractions, or of pre-ex-gay behavior, is NOT sufficient, unless the purported ex-gay-ness starts *after* the outing being investigated
* plausible innocent explanation


e) Do they get a rainbow star?
---

1. Half-star

*Voluntary* admission of any sort that they are gay/bi. Be generous.

Includes admissions:

* post-outing
* through lawyers
* with apologies
* with "struggling ex-gay" caveats
* without change in policy / beliefs

Does not include:

* admission of act but denying intent (e.g. claiming duress)


2. Full star

Voluntary admission accompanied by substantive policy change.

Includes:

* ex-ex-gay
* pro-LGBT policy changes
* resignation motivated by policy change (rather than eg embarrassment or pressure)
* coming out against their former organization


3. Double full star

Requires major pro-LGBT actions - not just reversal of prior stance, but going above and beyond.



C. Update website
===

a) Decide on win date, summary, and links
---

Date will usually be date of publication of reliable source.

Primary link should be a one-stop reliable source for the outing, preferably with background info. Use best link available, preferably primary source unless a secondary source provides more context.

Summary should be concise, witty if possible, and link to extra sources iff they are additive. Should generally include both what happened and the reaction (e.g. any admission; consequences like firing, resignation, or legal charges; etc). Secondary links can include eg more background, targeted humor, etc. See existing table for examples.


b) Update past winners table
---

Copy the current winner section to past winners table. Conform to table style.

Calculate "# days held" based on date of new winner. Add that number front of `$days` array (after `$cur`) and use in the table.

Add half or full rainbow star (with styling, see previous entries) if merited. Occasionally there are updates that merit an upgrade.


c) Make an image
---

Find a good photo of winner, preferably from their wikipedia, professional profile, or similar source.

Don't use ugly or pejorative photos (eg booking) unless none other available.

Crop to headshot, then resize to 100px height. Variable width is fine.

Make sure new image has `go+r` permissions.


d) Update new winner section
---

Use the "came out" or "was caught" text depending on star status of winner. Leave and comment out the opposite text if swapping.

Uncomment or comment stars section depending on status.

Add date of win to the `$cur mktime` call - `0,0,0,day,month,year`

Use formal title abbreviation, link to their affiliation (preferably from Wikipedia) in parens after name. Use specific affiliation if available.


e) Update RSS
---

Update lastBuildDate to actual current time

Add item, formatted like the rest, with name (no title / affiliation) and primary link


f) Update website
---

Double-check new image has `go+r` permissions. May require ssh'ing in after rsync to chmod it.

E.g. `sync.sh` (make local copy outside of repo; should work from another directory):

```
git -C ~/path/to/gayhomophobe.com/ add ~/path/to/gayhomophobe.com/
git -C ~/path/to/gayhomophobe.com/ commit -am "update"
git -C ~/path/to/gayhomophobe.com/ push
rsync -vrSzhPc --exclude="- .git" ~/path/to/gayhomophobe.com/ gayhomophobe@gayhomophobe.com:~/gayhomophobe.com
```

Test website to make sure it works properly - image displayed, previous-winners table looks good, time-since updated, format not broken, etc.


g) Post Twitter update
---

See prior updates announcing winners. Link candidate with @ if you verify twitter account is theirs, use formal reference (e.g. Rev. Foo Bar) otherwise.


h) Monitor twitter, google alert, etc for reactions, any significant updates, quotables, etc
---

Update status if merited. Retract if merited. Twitter-fav amusing references. Consider adding notable or particularly amusing cites to gayhomophobe.com to quotes list.
