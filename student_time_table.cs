using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace T_diary
{
    #region Student_time_table
    public class Student_time_table
    {
        #region Member Variables
        protected string _Course_id;
        protected int _Semester;
        protected string _Session;
        protected string _Section;
        protected long _Choose_File;
        protected int _fid;
        #endregion
        #region Constructors
        public Student_time_table() { }
        public Student_time_table(string Course_id, int Semester, string Session, string Section, long Choose_File)
        {
            this._Course_id=Course_id;
            this._Semester=Semester;
            this._Session=Session;
            this._Section=Section;
            this._Choose_File=Choose_File;
        }
        #endregion
        #region Public Properties
        public virtual string Course_id
        {
            get {return _Course_id;}
            set {_Course_id=value;}
        }
        public virtual int Semester
        {
            get {return _Semester;}
            set {_Semester=value;}
        }
        public virtual string Session
        {
            get {return _Session;}
            set {_Session=value;}
        }
        public virtual string Section
        {
            get {return _Section;}
            set {_Section=value;}
        }
        public virtual long Choose_File
        {
            get {return _Choose_File;}
            set {_Choose_File=value;}
        }
        public virtual int Fid
        {
            get {return _fid;}
            set {_fid=value;}
        }
        #endregion
    }
    #endregion
}