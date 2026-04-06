# Task: Correct script links from js/ to assets/js/ in PHP files

## Steps:
- [ ] Step 1: Edit root PHP files with exact <script src="js/script.js"></script> matches (list files below)
- [ ] Step 2: Handle duplicates in files like index.php
- [ ] Step 3: Verify with search_files (0 old matches)
- [ ] Step 4: Test site functionality
- [ ] Step 5: Complete

## Files to edit (20+):
- index.php (duplicates)
- partners.php
- volunteers.php
- supporters.php
- contact.php
- about.php
- anual-reports.php
- our-certification.php
- project_feedme.php
- project_life.php
- project_elevate.php
- projectpro.php
- project_ration.php
- project_milkyway.php
- privacy_policy.php
- terms_conditions.php
- logo_story.php
- cancellation_refund_policy.php
- executive_members.php
- executive_committee.php
(and others from search results)

Replacements:
```
<script src="js/script.js"></script> → <script src="assets/js/script.js"></script>
<script src="js/include.js"></script> → <script src="assets/js/include.js"></script>
<script src="js/header.js"></script> → <script src="assets/js/header.js"></script>
```

