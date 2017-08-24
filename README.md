# NPTEL-iitkgp
This repository contains basic files and instruction for NPTEL HDD setup.

### Directory Structure  
<pre>/MEDIA/DISK-1  
 ┬  
 ├ setup.sh  
 ├ .htaccess  
 ├ index.php  
 ├ DisplayVideo.php  
 ├ [DIR] videos  
 ├ [DIR] json_db  
     ┬  
     ├ dbDisciplineList.json * [discipline_id, discipline_name]  
     ├ dbSubjectList1.json [subject_id, discipline_id, type, org, subject_name, [coordinator_1,coordinator_2,...]]  
     └ dbLectureList1.json [subject_id, lecture_id, title]  
  
/MEDIA/DISK-N **  
 ┬  
 ├ [DIR] videos  
 ├ [DIR] json_db  
     ┬   
     ├ dbSubjectListN.json [subject_id, discipline_id, type, org, subject_name, [coordinator_1,coordinator_2,...]]  
     └ dbLectureListN.json [subject_id, lecture_id, title]  
</pre>
 \*   Here only the first (ie. DISK-1) will contain the list of all disciplines (ie. dbDisciplineList.json)  
 \*\* Here N is the serial no. of the disk.   
 
### Instruction
- Connect and open all disks
- Open terminal and run *setup.sh* on *DISK-1*
- Enter the number of drives connected.
